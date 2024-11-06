<!-- Backend Bundle JavaScript -->
<script src="{{asset('js/libs.min.js')}}"></script>
<script src="{{asset('js/core/external.min.js')}}"></script>
@if(in_array('data-table',$assets ?? []))
<script src="{{ asset('vendor/datatables/buttons.server-side.js')}}"></script>
@endif
<!-- Lodash Utility -->
<script src="{{asset('vendor/lodash/lodash.min.js')}}"></script>
<!-- Utilities Functions -->
<script src="{{asset('js/setting/utility.js')}}"></script>
<!-- Settings Script -->
<script src="{{asset('js/setting/setting.js')}}"></script>
<!-- Settings Init Script -->
<script src="{{asset('js/setting/setting-init.js')}}" defer></script>
<!-- slider JavaScript -->
<script src="{{asset('js/slider.js')}}"></script>
<!--ecommerce Script -->
<script src="{{asset('js/ecommerce.js')}}"></script>
<!-- masonry JavaScript -->
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<!-- SweetAlert JavaScript -->
<script src="{{asset('js/enchanter.js')}}"></script>
<!-- SweetAlert JavaScript -->
<script src="{{asset('js/sweetalert.js')}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{asset('js/customizer.js')}}"></script>
<!-- Fslightbox JavaScript -->
<script src="{{asset('js/fslightbox.js')}}"></script>
<!-- app JavaScript -->
<script src="{{asset('vendor/Leaflet/leaflet.js')}}"></script>
<script src="{{asset('js/charts/weather-chart.js')}}"></script>
<script src="{{asset('js/charts/admin.js')}}"></script>
<!--calender javascript-->
<script src="{{asset('vendor/fullcalendar/core/main.js')}}"></script>
<script src="{{asset('vendor/fullcalendar/daygrid/main.js')}}"></script>
<script src="{{asset('vendor/fullcalendar/timegrid/main.js')}}"></script>
<script src="{{asset('vendor/fullcalendar/list/main.js')}}"></script>
<script src="{{asset('vendor/fullcalendar/interaction/main.js')}}"></script>
<script src="{{asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>
<script src="{{asset('vendor/moment.min.js')}}"></script>

@stack('scripts')
<!--weather java-->
<!-- Custom JavaScript -->
@if($modalJs ?? '')
<!-- Ajax Modal JavaScript -->
<script src="{{asset('js/modelview.js') }}"></script>
@endif

<script src="{{asset('js/app.js')}}"></script>

@if (isset($isZuck) && $isZuck)
{{-- zuck javascript --}}
<script src="{{asset('vendor/zuck.js-master/dist/zuck.min.js')}}"></script>
<script src="{{asset('vendor/zuck.js-master/demo/script.js')}}"></script>
<script src="{{asset('js/zuck.js')}}"></script>
@endif

<script src="{{asset('js/modelview.js')}}"></script>
