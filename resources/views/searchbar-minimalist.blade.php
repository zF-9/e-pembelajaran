<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet" />
    <link href="{{asset('css/minimalist.css')}}" rel="stylesheet" />
  </head>
  <body>
    <div class="s013">
      <form>
        <fieldset>
          <legend>PORTAL E-PEMBELAJARAN JPANS</legend>
        </fieldset>
        <div class="inner-form">
          <div class="left">
            <div class="input-wrap first">
              <div class="input-field first">
                <label>KATA KUNCI</label>
                <input type="text" placeholder="" />
              </div>
            </div>
            <div class="input-wrap second">
              <div class="input-field second">
                <label>KATEGORI</label>
                <div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                    <option placeholder="">Pengurusan</option>
                    <option>Kempimpinan</option>
                    <option>Polisi</option>
                    <option>Governan</option>
                    <option>Kewangan</option>
                    <option>I.T</option>
                    <option>Ekonomi</option>
                    <option>Perhutanan</option>
                    <option>Pertanian</option>
                    <option>Sains</option>
                    <option>Kesihatan</option>
                    <option>Kejuruteraan</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <button class="btn-search" type="button">CARI</button>
        </div>
      </form>
    </div>
    <script src="{{asset('js/choices.js')}}"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
