<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marke telefona</title>
  <link rel="stylesheet" href="global.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>



<body>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Izmena marke</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- sadrzaj modala -->
          <form>
            <div class="form-group centered">
              <label for="naziv_marke">Naziv marke:</label>
              <input type="text" class="form-control" id="naziv_marke" value='' required>
            </div>
            <div class="form-group">
              <label for="zemlja_porekla">Zemlja porekla:</label>
              <select type="text" class="form-control" id="zemlja_porekla" value='' required></select>
            </div>
            <fieldset disabled>
              <div class="form-group">
                <label for="broj_modela">Broj modela</label>
                <!-- placeholder/value -->
                <input type="text" id="broj_modela" class="form-control" placeholder="0">
              </div>
            </fieldset>
            <div class="d-grid gap-2">
              <a href='./model.php' id='sviModeli'><button class="btn btn-warning" type="button">Svi modeli</button></a>
            </div>
          </form>

        </div>
        <div class="modal-footer align_center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="button_sacuvaj">Sacuvaj</button>
          <button type='button' class="btn btn-danger" data-dismiss="modal" id="button_delete">Obrisi</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dodavanje nove marke</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- sadrzaj modala -->
          <form>
            <div class="form-group">
              <label for="naziv_marke_dodaj">Naziv marke:</label>
              <input type="text" class="form-control" id="naziv_marke_dodaj" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="zemlja_porekla_dodaj">Zemlja porekla:</label>
              <select class="form-control" id="zemlja_porekla_dodaj" placeholder="" required>

              </select>
            </div>
            <fieldset disabled>
              <div class="form-group">
                <label for="broj_modela_dodaj">Broj modela</label>
                <input type="text" id="broj_modela_dodaj" class="form-control" placeholder="0">
              </div>
            </fieldset>
          </form>

        </div>
        <div class="modal-footer align_center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="button_dodaj">Dodaj</button>
        </div>
      </div>
    </div>
  </div>

  <?php include 'header.php'; ?>
  <div class='centerDiv'>

    <div class='left_div grid-item'>

    </div>

    <div class='middle_div grid-item'>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">/Marke</li>
        </ol>
      </nav>

      <div class='h_div'>
        <h1 class='h1_text'>Marke telefona</h1>
        <i>- detalji -</i>
        <br>
        <hr>
      </div>

      <div class='table_div table-hover'>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Marka</th>
              <th scope="col">Zemlja porekla</th>
              <th scope="col">Broj modela</th>
            </tr>
          </thead>
          <tbody id='marke'>


          </tbody>
        </table>
      </div>

      <div class="button_div1">
        <button data-toggle="modal" data-target="#exampleModal" type="button"
          class="btn btn-secondary btn-lg btn-block">NOVA MARKA</button>
      </div>

      <div class="alert alert-warning alert-dismissible fade show align_center" role="alert">
        <strong>Dodajte novu marku!</strong> Naziv marke i zemlja porekla su obavezni!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    </div>

    <div class='right_div grid-item'>

    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script>
    let marke = [];
    let drzave = [];
    let trenutniId = -1;
    $(document).ready(function () {
      $('#button_sacuvaj').click(function () {
        if (trenutniId == -1) {
          return;
        }
        const naziv = $('#naziv_marke').val();
        const drzava = $('#zemlja_porekla').val();
        $.post('./server/izmeniMarku.php', { id: trenutniId, naziv: naziv, drzava: drzava }, function (data) {
          console.log(data);
          if (data != 1) {
            alert(data);
            return;
          }
          ucitajMarke();
          trenutniId = -1;
        })
      })
      $('#button_delete').click(function () {
        if (trenutniId == -1) {
          return;
        }
        $.post('./server/obrisiMarku.php', { id: trenutniId }, function (data) {
          if (data != 1) {
            alert(data);
          }
          console.log({ trenutniId: trenutniId });
          if (data == 1) {
            console.log('filter')
            marke = marke.filter(function (elem) { return elem.id != trenutniId });
            iscrtajTabelu();
          }

          trenutniId = -1;
        })
      })
      ucitajMarke();
      ucitajDrzave();
      $('#button_dodaj').click(function (e) {
        const naziv = $('#naziv_marke_dodaj').val();
        const drzava = $('#zemlja_porekla_dodaj').val();
        $.post('./server/kreirajMarku.php', { naziv: naziv, drzava: drzava }, function (data) {
          console.log(data);
          if (data != 1) {
            alert(data);
            return;
          }
          ucitajMarke();
        })
      })
      $('#exampleModal').on('show.bs.modal', function (e) {

        $('#zemlja_porekla_dodaj').html('');
        for (let drzava of drzave) {
          $('#zemlja_porekla_dodaj').append(`
            <option value='${drzava.id}'>${drzava.naziv}</option>
          `)
        }
      })
      $('#exampleModal2').on('show.bs.modal', function (e) {


        const button = $(e.relatedTarget);
        const id = button.data('id');
        trenutniId = id;
        $('#zemlja_porekla').html('');
        for (let drzava of drzave) {
          $('#zemlja_porekla').append(`
            <option value='${drzava.id}'>${drzava.naziv}</option>
          `)
        }
        const marka = marke.find(function (elem) {
          return elem.id == id;
        });
        if (!marka) {
          return;
        }
        $('#sviModeli').attr('href', 'model.php?id=' + id)
        $('#zemlja_porekla').val(marka.drzava);
        $('#naziv_marke').val(marka.naziv);
        $('#broj_modela').val(marka.broj_modela);
      })
    })
    function ucitajDrzave() {
      $.getJSON('./server/vratiDrzave.php', function (data) {
        if (!data.status) {
          alert(data.greska);
          return;
        }
        drzave = data.drzave;

      })
    }
    function ucitajMarke() {
      $.getJSON('./server/vratiMarke.php', function (data) {
        if (!data.status) {
          alert(data.greska);
          return;
        }
        console.log(data.marke)
        marke = data.marke;
        iscrtajTabelu();
      })
    }
    function iscrtajTabelu() {
      $('#marke').html('');
      let index = 1;
      for (let marka of marke) {
        $('#marke').append(`
          <tr data-toggle="modal" data-target="#exampleModal2" data-id=${marka.id}  >
              <th scope="row">${index++}</th>
              <td>${marka.naziv}</td>
              <td>${marka.drzava_naziv}</td>
              <td>${marka.broj_modela}</td>
            </tr>
          `)
      }
    }
  </script>
</body>

</html>