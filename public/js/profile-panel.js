var appname = 'layoutjs';
    
var app = angular.module(appname, []);

// Bootstrap angularjs app
angular.element(document).ready(function () {
    console.log("App: bootstraping.");
    angular.bootstrap(document, [appname]);
});

app.controller('mainCtrl',['$scope', function($scope){
  // main controller
  $scope.current = 0;
}]);

// pages directive
'use strict';

app.directive('pages', function(){
  return{
    restrict: 'E',
    template: '<div class="container" ng-transclude></div>',
    transclude: true,
    scope:{
      selected: '='
    },
    controller: function($scope, $element){
      var SLIDE_WIDTH = $element.width();
      var currentSlide = this.selected;
      var maxSlides = 0;
      var speed = 500;
      
      var slide = $element.children('.container');
        
      slide.swipe({
        triggerOnTouchEnd: true,
        swipeStatus: swipeStatus,
        allowPageScroll: "vertical",
        threshold: 75
      });
      
      this.selected = $scope.selected;
      
      var pages = [];
      this.addPage = function($element){
        pages.push($element);
      }
      
      this.count = function(){
        maxSlides = pages.length;
        return pages.length;
      }
      
      this.setActive = function($e){
        $element.find('page[aria-selected]').each(function(i, e){
          var $e = angular.element(e);
          if($e.attr('aria-selected') !== undefined){
            $e.removeAttr('aria-selected');
          }
        })
        
        $e.attr('aria-selected', 'true');
        //$e.focus();
        
        /*$element.scrollTo($e[0], 100, {
          onAfter : function () {
            requestAnimationFrame(function () {
              $e.addClass("active");
            });
          }
        });*/

      };
      
      var self = this;
      $scope.$watch('selected', function(n, o){
        if(n === undefined || n > self.count() || n < 0) return;
        currentSlide = n;
        $element.find('page').each(function(i, e){
          var $e = angular.element(e);
          if($e.data('id') === n){
            scrollSlides(SLIDE_WIDTH * n, speed);
            self.setActive(pages[currentSlide]);
            return;
          }
        })
      });
      
      /**
       * Catch each phase of the swipe.
       * move : we drag the div
       * cancel : we animate back to where we were
       * end : we animate to the next image
       */
      function swipeStatus(event, phase, direction, distance) {
      	//If we are moving before swipe, and we are going L or R in X mode, or U or D in Y mode then drag.
      	if (phase == "move" && (direction == "left" || direction == "right")) {
      		var duration = 0;

      		if (direction == "left") {
      			scrollSlides((SLIDE_WIDTH * currentSlide) + distance, duration);
      		} else if (direction == "right") {
      			scrollSlides((SLIDE_WIDTH * currentSlide) - distance, duration);
      		}

      	} else if (phase == "cancel") {
      		scrollSlides(SLIDE_WIDTH * currentSlide, speed);
      	} else if (phase == "end") {
      		if (direction == "right") {
      			previousSlide();
      		} else if (direction == "left") {
      			nextSlide();
      		}
      	}
      }

      function previousSlide() {
      	currentSlide = Math.max(currentSlide - 1, 0);
      	//scrollSlides(SLIDE_WIDTH * currentSlide, speed);
        $scope.selected = currentSlide;
        $scope.$apply();
      }

      function nextSlide() {
      	currentSlide = Math.min(currentSlide + 1, maxSlides - 1);
      	//scrollSlides(SLIDE_WIDTH * currentSlide, speed);
        $scope.selected = currentSlide;
        $scope.$apply();
      }

      /**
       * Manually update the position of the imgs on drag
       */
      function scrollSlides(distance, duration) {
      	slide.css("transition-duration", (duration / 1000).toFixed(1) + "s");

      	//inverse the number we set in the css
      	var value = (distance < 0 ? "" : "-") + Math.abs(distance).toString();
        
        slide.css({
         transform: "translate(" + value + "px,0)",
         MozTransform: "translate(" + value + "px,0)",
         WebkitTransform: "translate(" + value + "px,0)",
         msTransform: "translate(" + value + "px,0)"
        });
      }
      
    }
  }
})

app.directive('page', function(){
  return{
    restrict: 'E',
    require: '^pages',
    link: function($scope, $element, $attrs, pages){
      var id = pages.count();
      
      $element.data('id', id);
      
      pages.addPage($element);
    }
  }
});

// tabLayout directive
app.directive('tabLayout', function($timeout){
  return {
    restrict: 'E',
    template: '\
    <div class="tabs_container">\
      <div class="indicator"></div>\
      <div class="tabs_content" ng-transclude></div>\
    </div>',
    transclude: true,
    scope: {
      selected: '='
    },
    controller: function($scope, $element){
      $element
        .attr('role', 'tablist')
        .attr('tabindex', 0);
        
      var self = this;
      this.currentTab = $scope.selected;
      var tabs = [];
      
      this.addTab = function($element){
        tabs.push($element);
      }
      
      this.count = function(){
        return tabs.length;
      }
      
      var indicator = $element.find('.indicator');
      var tabsContainer = $element.find('.tabs_container');
      
      var lastLeft = 0;
      var attachIndicator = function(element){
        var pos = element.position();
        var left = pos.left + tabsContainer.offset().left;
        var moveRight = lastLeft > pos.left;
        
        var tabOffsetLeft = 0;
        
        lastLeft = pos.left;
        
        if(moveRight && !indicator.hasClass('right')){
          indicator.addClass('right');
          if(indicator.hasClass('left')) indicator.removeClass('left');
        }else if(!moveRight && !indicator.hasClass('left')){
          indicator.addClass('left');
          if(indicator.hasClass('right')) indicator.removeClass('right');
        }
        
        var right = $element.outerWidth() - pos.left - element.outerWidth() - tabOffsetLeft;
          
        if(!moveRight){
          
          indicator.css('left', left)
          indicator.css('right', right);
            
          $timeout(function(){
            indicator.css('left', pos.left);
          }, 10);
        } else {
          left = pos.left;
          
          indicator.css('left', left)
          
          $timeout(function(){
            indicator.css('right', right);
          }, 10);
        };
        
        // fix right side scroll
        var scrollOffset = (pos.left + element.outerWidth()) - $element.outerWidth() + tabOffsetLeft;
        if(scrollOffset > 0)
        {
          tabsContainer.scrollLeft(scrollOffset);
        }
        
        // fix left side scroll
        if(tabsContainer.scrollLeft() > pos.left){
          tabsContainer.scrollLeft(-pos.left);
        }
      };
      
      this.selected = function(tab, apply){
        $scope.selected = tab.data('id');
        tab.focus();
        if(apply) $scope.$apply();
      };
      
      var apply = function(tab){
        
        attachIndicator(tab);
        if($scope.multi === undefined){
          $element.find('tab').each(function(i, e){
            var $e = angular.element(e);
            if($e.attr('aria-selected') !== undefined){
              $e.removeAttr('aria-selected');
              $e.attr('tabindex', -1);
            }
          });
        
          tab.attr('aria-selected', 'true');
          tab.attr('tabindex', 0);
        }
      };
      
      $scope.$watch('selected', function(n, o){
        if(n === undefined || n > self.count() || n < 0) return;
        self.currentTab = n;
        
        apply(tabs[n]);
      });
      
    }
  }
});

app.directive('tab', function(){
  return {
    restrict: 'E',
    require: '^tabLayout',
    template: '<div class="tab-content" ng-transclude>',
    transclude: true,
    link: function($scope, $element, $attrs, ngCtrl){
      $element.attr('role', 'tab');
      
      var disabled = $element.attr('disabled') !== undefined && $element.attr('disabled') !== false;
      if(disabled) return;
      
      // init
      var id = ngCtrl.count();
      
      $element.data('id', id);
      
      if(id === ngCtrl.currentTab){
        ngCtrl.selected($element);
      }
      
      ngCtrl.addTab($element);
      
      applyElementEvents($element, -1);
      
      $element.bind('click', function(){
        ngCtrl.selected($element, true);
      });
    }
  }
});

// helpers
/*
  apply events to elements
*/

const ATTR_PRESSED = 'pressed';
const ATTR_FOCUSED = 'focused';
const ATTR_DISABLED = 'disabled';
const ATTR_AREA_DISABLED = 'aria-disabled';
  
function applyElementEvents($element, tabindex){
  tabindex = tabindex || 0;
  $element.attr('tabindex', tabindex);
  
  var disabled = $element.attr(ATTR_DISABLED) !== undefined && $element.attr(ATTR_DISABLED) !== false;
      
  $element.attr(ATTR_AREA_DISABLED, disabled);
  if(disabled) $element.attr(ATTR_DISABLED, '');
    
  // add pressed attr when mousedown
  $element.bind('mousedown', function(){
    if($element.attr(ATTR_PRESSED) === undefined){
      $element.attr(ATTR_PRESSED, '');
    }
  });
  
  // remove pressed attr when mousedown
  $element.bind('mouseup', function(){
    if($element.attr(ATTR_PRESSED) != undefined)
      $element.removeAttr(ATTR_PRESSED);
  });
  
  // add pressed attr when keybord space and enter key pressed
  $element.bind('keydown', function(event){
    if(event.keyCode === 13 || event.keyCode === 32){ // enter or space
      if($element.attr(ATTR_PRESSED) === undefined){
        $element.attr(ATTR_PRESSED, '');
      }
      
      event.stopPropagation();
      event.preventDefault();
      return;
    }
  });
  
  // remove pressed attr when keybord space and enter key pressed
  $element.bind('keyup', function(event){
    if(event.keyCode === 13 || event.keyCode === 32){ // enter or space
      if($element.attr(ATTR_PRESSED) !== undefined){
        $element.removeAttr(ATTR_PRESSED);
      }
      
      event.stopPropagation();
      event.preventDefault();
      return;
    }
  });
  
  // add focused attr when focus
  $element.bind('focus', function(event){
    if($element.attr(ATTR_FOCUSED) === undefined)
      $element.attr(ATTR_FOCUSED, '');
  });
  
  // remove focused attr when blur
  $element.bind('blur', function(event){
    if($element.attr(ATTR_FOCUSED) !== undefined)
      $element.removeAttr(ATTR_FOCUSED);
  });
};