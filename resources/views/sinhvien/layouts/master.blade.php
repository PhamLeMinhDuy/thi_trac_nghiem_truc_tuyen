<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="bg-white">
    <div class="flex flex-col min-h-screen"> <!-- Sử dụng flex và flex-col để footer dính dưới cùng của trang -->
        <div class="flex h-screen">
            @include('sinhvien.layouts.blocks.sidebar')
            <div class="flex-1 relative">
                @include('sinhvien.layouts.blocks.header')
                <main class="pl-4 bg-white ">
                    <h2 class="text-lg text-gray-800">
                        @yield('page-title')
                        @yield('content')
                    </h2>
                </main>
                @include('sinhvien.layouts.blocks.footer')
            </div>
            
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
     document.addEventListener("DOMContentLoaded", function() {
            const sidebar = document.getElementById('sidebar');
            const sidebarCollapseButton = document.getElementById('sidebarCollapse');

            sidebarCollapseButton.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
            });

            // Hide sidebar when screen size is smaller than 760px
            function handleResize() {
                if (window.innerWidth < 760) {
                    sidebar.classList.add('hidden');
                } else {
                    sidebar.classList.remove('hidden');
                }
            }

            window.addEventListener('resize', handleResize);
            handleResize(); // Initial handling on page load
        });
</script>