@include("admin.layouts.header")
@include("admin.layouts.navbar")


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://127.0.0.1:8080"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @include("admin.layouts.message")
        @yield('content')
    </section>
    <!-- /.content -->
  </div>

@include("admin.layouts.footer")