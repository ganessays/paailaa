@section('footer')


    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
            <div class="row font-size-sm">
                <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                    Design & Develop by <a class="font-w600" href="https://www.geniusservice.com.np" target="_blank">Genius Service Nepal Pvt. Ltd.</a>
                </div>
                <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                    <a class="font-w600" href="{{url('')}}" target="_blank"><span style="color:#00A8FF; font-weight: bolder;">Chubi Project</span> <span style="background-color: #00A8FF; color:#fff; padding:5px; border-radius: 50%;">Management System</span></a> &copy; <span data-toggle="year-copy">{{date('Y')}}</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->

    <!-- Apps Modal -->
    <!-- Opens from the modal toggle button in the header -->
    <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Apps</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <!-- CRM -->
                                <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-speedometer fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            CRM
                                        </p>
                                    </div>
                                </a>
                                <!-- END CRM -->
                            </div>
                            <div class="col-6">
                                <!-- Products -->
                                <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-rocket fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Products
                                        </p>
                                    </div>
                                </a>
                                <!-- END Products -->
                            </div>
                            <div class="col-6">
                                <!-- Sales -->
                                <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-plane fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Sales
                                        </p>
                                    </div>
                                </a>
                                <!-- END Sales -->
                            </div>
                            <div class="col-6">
                                <!-- Payments -->
                                <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-wallet fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Payments
                                        </p>
                                    </div>
                                </a>
                                <!-- END Payments -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Apps Modal -->
    </div>
    <!-- END Page Container -->



    <!-- Page JS Plugins -->
    <script src="{{asset('public/backend')}}/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/backend')}}/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('public/backend')}}/assets/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
    <script src="{{asset('public/backend')}}/assets/js/plugins/datatables/buttons/buttons.print.min.js"></script>
    <script src="{{asset('public/backend')}}/assets/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
    <script src="{{asset('public/backend')}}/assets/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
    <script src="{{asset('public/backend')}}/assets/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>

    <!-- Page JS Code -->
    <script src="{{asset('public/backend')}}/assets/js/pages/be_tables_datatables.min.js"></script>
    <script src="{{asset('public/backend')}}/assets/js/oneui.core.min.js"></script>

    <script src="{{asset('public/backend')}}/assets/js/oneui.app.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="{{asset('public/backend')}}/assets/js/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{asset('public/backend')}}/assets/js/plugins/ckeditor/ckeditor.js"></script>
    <script src="{{asset('public/backend')}}/assets/js/plugins/simplemde/simplemde.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="{{asset('public/backend')}}/assets/js/plugins/chart.js/Chart.bundle.min.js"></script>

    <script src="{{asset('public/backend')}}/assets/js/view_photo.js"></script>

    <!-- Page JS Code -->
    <script src="{{asset('public/backend')}}/assets/js/pages/be_pages_dashboard.min.js"></script>
    <script>jQuery(function(){ One.helpers(['summernote', 'ckeditor', 'simplemde']); });</script>

    </body>
</html>

@endsection