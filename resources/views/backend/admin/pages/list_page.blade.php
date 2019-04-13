@extends('Admin.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
       <div class="content">
           <div class="block" style="padding:20px;">
           <form action="" method="post" enctype="multipart/form-data">
               {{csrf_field()}}

           </form>
       </div>
       </div>
    </main>


    </main>
    <!-- END Main Container -->
@endsection