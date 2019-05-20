
@extends('backend.client.index')
@section('body')

    <div class="client_profile_content">
        <div class="container">
            <div class="collage_profile_details">
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
                                    <h1 class="collage_p_t">{{$client->company_name}}</h1>
                                </div>
                                <span>
                                <a href="#">
                                  <i class="fa fa-map-marker"></i>
                                     <span>{{$client->address}}</span>
                                </a>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection