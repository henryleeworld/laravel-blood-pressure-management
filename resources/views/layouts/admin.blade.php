<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    {{ trans('panel.site_title') }}
  </title>
  @vite(['resources/sass/app.scss'])
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS Files -->
  <link href="{{ asset('css/soft-ui-dashboard.min.css') }}" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.13.10/css/jquery.dataTables.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.13.10/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/select/1.7.0/css/select.dataTables.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.min.css" integrity="sha512-ygIxOy3hmN2fzGeNqys7ymuBgwSCet0LVfqQbWY10AszPMn2rB9JY0eoG0m1pySicu+nvORrBmhHVSt7+GI9VA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
  @yield('styles')
</head>

<body class="g-sidenav-show bg-gray-100">

    @include('partials.menu')

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
      <div class="container-fluid py-4">
      @yield('content')

      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div id="copyright" class="copyright text-center text-sm text-muted text-lg-start">
                ©<script>
                    document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                </script>
              </div>
            </div>
          </div>
        </div>
      </footer>
      </div>
    </main>
    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
  @vite(['resources/js/app.js'])
  <!--   Core JS Files   -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Plugin for the charts, full documentation here: https://www.chartjs.org/ -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  {{-- <script src="{{ asset('js/Chart.extension.js') }}"></script> --}}
  
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/soft-ui-dashboard.min.js') }}"></script>

  <script src="https://cdn.datatables.net/1.13.10/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.10/js/dataTables.bootstrap5.min.js"></script>
  <script src="//cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.5/pdfmake.min.js" integrity="sha512-rDbVu5s98lzXZsmJoMa0DjHNE+RwPJACogUCLyq3Xxm2kJO6qsQwjbE5NDk2DqmlKcxDirCnU1wAzVLe12IM3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.5/vfs_fonts.min.js" integrity="sha512-BDZ+kFMtxV2ljEa7OWUu0wuay/PAsJ2yeRsBegaSgdUhqIno33xmD9v3m+a2M3Bdn5xbtJtsJ9sSULmNBjCgYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" integrity="sha512-XMVd28F1oH/O71fzwBnV7HucLxVwtxf26XV8P4wPk26EDxuGZ91N8bsOttmnomcCD3CS5ZMRL50H0GgOHvegtg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/locale/zh-tw.min.js" integrity="sha512-2n88JfMhTbm2TPaHV4U5A1vgTX9317dzZ3AWG6Q1YDb5d7/fTOAquQr4Iaprl7wW84EYqpoofQLKIYhqTz4eLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script>
      $(function() {
let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
let printButtonTrans = '{{ trans('global.datatables.print') }}'
let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
let selectAllButtonTrans = '{{ trans('global.select_all') }}'
let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}'

let languages = {
  'en': '//cdn.datatables.net/plug-ins/1.13.10/i18n/en-GB.json',
  'zh_TW': '//cdn.datatables.net/plug-ins/1.13.10/i18n/zh-HANT.json'
};

$.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
$.extend(true, $.fn.dataTable.defaults, {
  language: {
    url: languages['{{ app()->getLocale() }}']
  },
  columnDefs: [{
      orderable: false,
      className: 'select-checkbox',
      targets: 0
  }, {
      orderable: false,
      searchable: false,
      targets: -1
  }],
  select: {
    style:    'multi+shift',
    selector: 'td:first-child'
  },
  order: [],
  scrollX: true,
  pageLength: 100,
  dom: 'lBfrtip<"actions">',
  buttons: [
    {
      extend: 'selectAll',
      className: 'btn-primary',
      text: selectAllButtonTrans,
      exportOptions: {
        columns: ':visible'
      },
      action: function(e, dt) {
        e.preventDefault()
        dt.rows().deselect();
        dt.rows({ search: 'applied' }).select();
      }
    },
    {
      extend: 'selectNone',
      className: 'btn-primary',
      text: selectNoneButtonTrans,
      exportOptions: {
        columns: ':visible'
      }
    },
    {
      extend: 'copy',
      className: 'btn-light',
      text: copyButtonTrans,
      exportOptions: {
        columns: ':visible'
      }
    },
    {
      extend: 'csv',
      className: 'btn-light',
      text: csvButtonTrans,
      exportOptions: {
        columns: ':visible'
      }
    },
    {
      extend: 'excel',
      className: 'btn-light',
      text: excelButtonTrans,
      exportOptions: {
        columns: ':visible'
      }
    },
    {
      extend: 'pdf',
      className: 'btn-light',
      text: pdfButtonTrans,
      exportOptions: {
        columns: ':visible'
      }
    },
    {
      extend: 'print',
      className: 'btn-light',
      text: printButtonTrans,
      exportOptions: {
        columns: ':visible'
      }
    },
    {
      extend: 'colvis',
      className: 'btn-light',
      text: colvisButtonTrans,
      exportOptions: {
        columns: ':visible'
      }
    }
  ]
});

$.fn.dataTable.ext.classes.sPageButton = '';
});

  </script>
  @yield('scripts')
</body>

</html>
