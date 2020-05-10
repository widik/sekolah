@extends('layout.master')
@section('content')

    <div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
        <div class="x_title">
            <h2>User Report</h2>
            <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-md-3 col-sm-3  profile_left">
            <div class="profile_img">
                <div id="crop-avatar">
                <!-- Current avatar -->
                <img class="img-responsive avatar-view" width="200" height="240" src="{{$siswa->get_avatar()}}" alt="Avatar" title="Change the avatar">
                </div>
            </div>
        <h3>{{$siswa->nama_depan}} {{$siswa->nama_belakang}}</h3>

            <ul class="list-unstyled user_data">
                <li>
                    <i class="fa fa-briefcase user-profile-icon"></i>
                    @if($siswa->jenis_kelamin == "L")
                        Laki-Laki
                    @else
                        Perempuan
                    @endif
                </li>
                <li><i class="fa fa-map-marker user-profile-icon"></i> {{$siswa->alamat}}</li>
            </ul>

                <a class="btn btn-warning" href="/siswa">Back</a>
            <br />



            </div>
            <div class="col-md-9 col-sm-9 ">


                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Client Company</th>
                                <th class="hidden-phone">Hours Spent</th>
                                <th>Contribution</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>New Company Takeover Review</td>
                                <td>Deveint Inc</td>
                                <td class="hidden-phone">18</td>
                                <td class="vertical-align-mid">
                                    <div class="progress">
                                    <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>New Partner Contracts Consultanci</td>
                                <td>Deveint Inc</td>
                                <td class="hidden-phone">13</td>
                                <td class="vertical-align-mid">
                                    <div class="progress">
                                    <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td>3</td>
                                <td>Partners and Inverstors report</td>
                                <td>Deveint Inc</td>
                                <td class="hidden-phone">30</td>
                                <td class="vertical-align-mid">
                                    <div class="progress">
                                    <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td>4</td>
                                <td>New Company Takeover Review</td>
                                <td>Deveint Inc</td>
                                <td class="hidden-phone">28</td>
                                <td class="vertical-align-mid">
                                    <div class="progress">
                                    <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                            <!-- end user projects -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                            photo booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>

@endsection
