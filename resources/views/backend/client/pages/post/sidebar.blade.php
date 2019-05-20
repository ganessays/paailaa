    <div class="client_area_right">
        <h2>Your Info <i class="fa fa-user"></i></h2>
        <a class=" twPc-block" style="background-image: url('{{asset('public/frontend/images/uploads/college/banner')}}/{{$client->banner}}'); height: 200px"></a>
        <div class="row">
            <div class="col-md-12">
                <div class="cllage_pfofile_image">
                    <div class="twPc-button">
                        <div class="top_feature_collage_view">
                            <p>
                                <i class="fa fa-eye"></i>3232
                            </p>
                        </div>
                    </div>
                    <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
                        <img alt="Mert S. Kaplan" src="{{asset('public/frontend/images/uploads/college/logo')}}/{{$client->logo}}" class="twPc-avatarImg">
                    </a>
                    <div class="twPc-divUser">
                        <div class="twPc-divName">
                            <h2 class="client_name">{{$client->company_name}}</h2>
                            <p>Address:{{$client->ddress}} </p>
                            <p>Est:{{$client->com_establised}}</p>
                            <p>User Name: {{$client->username}}</p>
                            <p>Tel: {{$client->office_contact}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
