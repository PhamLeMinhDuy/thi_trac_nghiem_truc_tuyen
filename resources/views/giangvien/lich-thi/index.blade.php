@extends('layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('page-title')
    <div class="flex items-center justify-between">
        <div class="mr-5">
            Xem lịch thi
        </div> 
    </div>
@endsection
@section('content')
    <div id="calendar"></div>
@endsection
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css" rel="stylesheet" />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
@section('page-js')
     <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            
            var danhSachBaiThi = {!! json_encode($danh_sach_bai_thi) !!};

            var events = danhSachBaiThi.map(function(baiThi) {
            return {
                title: baiThi.ten_bai_thi,
                start: baiThi.thoi_gian_bat_dau,
                end: baiThi.thoi_gian_ket_thuc
            };
            });

            var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'vi',
            events: events,
            contentHeight: 600,
            });

            calendar.render();
        });
    </script> 
@endsection