@extends('admin.layouts.app')

@section('title')

@endsection

@section('main-content')
    <div class="container-fluid">
        <div class="side-body padding-top">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="#">
                        <div class="card white summary-inline">
                            <div class="card-body">
                                <div class="float-left col-md-2"><i class="icon fa fa-pie-chart fa-4x" style="color: blueviolet;"></i></div>
                                <div class="float-left sub-title col-md-8 col-sm-6 col-xs-4" style="margin: -10px 0 0 30px;font-size: 18px; padding: 0; border-bottom: 0;">会议统计</div>
                                <div>
                                    <div class="float-left col-md-8 col-sm-6 col-lg-3 col-xs-6" style="margin-left: 20px; width: 35%;">待审核：&nbsp;&nbsp;<a href="" style="color: blueviolet">123</a></div>
                                    <div class="float-left col-md-8 col-sm-6 col-lg-3 col-xs-6" style="margin-left: 20px; width: 35%;">未通过：&nbsp;&nbsp;<a href="" style="color: blueviolet">123</a></div>
                                    <div class="float-left col-md-8 col-sm-6 col-lg-3 col-xs-6" style="margin-left: 20px; width: 35%;">已通过：&nbsp;&nbsp;<a href="" style="color: blueviolet">123</a></div>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="#">
                        <div class="card white summary-inline">
                            <div class="card-body">
                                <div class="float-left col-md-2">
                                    <i class="icon fa fa-file-text-o fa-4x" style="color: blueviolet"></i>
                                </div>
                                <div class="float-left sub-title col-md-8 col-sm-6 col-xs-4" style="margin: -10px 0 0 30px;font-size: 18px; padding: 0; border-bottom: 0;">表单管理</div>
                                <div>
                                    <div class="float-left col-md-8 col-sm-6 col-lg-3 col-xs-6" style="margin-left: 20px; width: 50%;">常用表单：&nbsp;&nbsp;<a href="" style="color: blueviolet">123</a></div>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="#">
                        <div class="card white summary-inline">
                            <div class="card-body">
                                <div class="float-left col-md-2">
                                    <i class="icon fa fa-users fa-4x" style="color: blueviolet"></i>
                                </div>
                                <div class="float-left sub-title col-md-8 col-sm-6 col-xs-4" style="margin: -10px 0 0 30px;font-size: 18px; padding: 0; border-bottom: 0;">客户</div>
                                <div>
                                    <div class="float-left col-md-8 col-sm-6 col-lg-3 col-xs-6" style="margin-left: 20px; width: 50%;">客户总数：&nbsp;&nbsp;<a href="" style="color: blueviolet">123</a></div>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="#">
                        <div class="card white summary-inline">
                            <div class="card-body">
                                <div class="float-left col-md-2">
                                    <i class="icon fa fa-money fa-4x" style="color: blueviolet"></i>
                                </div>
                                <div class="float-left sub-title col-md-8 col-sm-6 col-xs-4" style="margin: -10px 0 0 30px;font-size: 18px; padding: 0; border-bottom: 0;">现金账户</div>
                                <div class="float-left col-md-2">
                                    <div class="float-left col-md-8 col-sm-6 col-lg-3 col-xs-6" style="margin-top: 3px; font-size: 15px;color: red;">1555555553.00</div>
                                </div>
                                <div class="float-right" style="margin-top: -2px;">
                                    <a href="" class="btn btn-default btn-sm">查看流水</a>
                                    <a href="" class="btn btn-danger btn-sm">提现</a>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="#">
                        <div class="card white summary-inline">
                            <div class="card-body">
                                <div class="float-left col-md-2"><i class="icon fa fa-home fa-4x" style="color: blueviolet;"></i></div>
                                <div class="float-left sub-title col-md-8 col-sm-6 col-xs-4" style="margin: -10px 0 0 30px;font-size: 18px; padding: 0; border-bottom: 0;">商户</div>
                                <div>
                                    <div class="float-left col-md-8 col-sm-6 col-lg-3 col-xs-6" style="margin-left: 20px; width: 35%;">待审核：&nbsp;&nbsp;<a href="" style="color: blueviolet">123</a></div>
                                    <div class="float-left col-md-8 col-sm-6 col-lg-3 col-xs-6" style="margin-left: 20px; width: 35%;">未通过：&nbsp;&nbsp;<a href="" style="color: blueviolet">123</a></div>
                                    <div class="float-left col-md-8 col-sm-6 col-lg-3 col-xs-6" style="margin-left: 20px; width: 35%;">已入驻：&nbsp;&nbsp;<a href="" style="color: blueviolet">123</a></div>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="#">
                        <div class="card white summary-inline">
                            <div class="card-body">
                                <div class="float-left col-md-2"><i class="icon glyphicon glyphicon-envelope fa-4x" style="color: blueviolet;"></i></div>
                                <div class="float-left sub-title col-md-8 col-sm-6 col-xs-4" style="margin: -10px 0 0 30px;font-size: 18px; padding: 0; border-bottom: 0;">消息</div>
                                <div>
                                    <div class="float-left col-md-8 col-sm-6 col-lg-3 col-xs-6" style="margin-left: 20px; width: 35%;">通知：&nbsp;&nbsp;<a href="" style="color: blueviolet">123</a></div>
                                    <div class="float-left col-md-8 col-sm-6 col-lg-3 col-xs-6" style="margin-left: 20px; width: 35%;">系统：&nbsp;&nbsp;<a href="" style="color: blueviolet">123</a></div>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row  no-margin-bottom">
                <div class="col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header" style="background: #E0E0E0">
                            <div class="card-title">
                                <div class="sub-title" style="font-size: 18px;">最新报名名单</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                        <div class="card-body no-padding">
                            <ul class="message-list">
                                <a href="#">
                                    <li>
                                        <img src="{{asset('admin')}}/img/profile/profile-1.jpg" class="profile-img pull-left img-circle">
                                        <div class="message-block" style="padding-top: 10px;">
                                            <div>
                                                <span class="username" style="font-size: 17px;">Tui2Tone</span>
                                            </div>
                                            <div class="message" style="font-size: 14px;">参加会议：麻醉学专业委员会成立大会</div>
                                        </div>
                                    </li>
                                </a>
                                <a href="#">
                                    <li>
                                        <img src="{{asset('admin')}}/img/profile/profile-1.jpg" class="profile-img pull-left img-circle">
                                        <div class="message-block" style="padding-top: 10px;">
                                            <div>
                                                <span class="username" style="font-size: 17px;">Tui2Tone</span>
                                            </div>
                                            <div class="message" style="font-size: 14px;">参加会议：麻醉学专业委员会成立大会</div>
                                        </div>
                                    </li>
                                </a>
                                <a href="#">
                                    <li>
                                        <img src="{{asset('admin')}}/img/profile/profile-1.jpg" class="profile-img pull-left img-circle">
                                        <div class="message-block" style="padding-top: 10px;">
                                            <div>
                                                <span class="username" style="font-size: 17px;">Tui2Tone</span>
                                            </div>
                                            <div class="message" style="font-size: 14px;">参加会议：麻醉学专业委员会成立大会</div>
                                        </div>
                                    </li>
                                </a>
                                <a href="#">
                                    <li>
                                        <img src="{{asset('admin')}}/img/profile/profile-1.jpg" class="profile-img pull-left img-circle">
                                        <div class="message-block" style="padding-top: 10px;">
                                            <div>
                                                <span class="username" style="font-size: 17px;">Tui2Tone</span>
                                            </div>
                                            <div class="message" style="font-size: 14px;">参加会议：麻醉学专业委员会成立大会</div>
                                        </div>
                                    </li>
                                </a>
                                <a href="#">
                                    <li>
                                        <img src="{{asset('admin')}}/img/profile/profile-1.jpg" class="profile-img pull-left img-circle">
                                        <div class="message-block" style="padding-top: 10px;">
                                            <div>
                                                <span class="username" style="font-size: 17px;">Tui2Tone</span>
                                            </div>
                                            <div class="message" style="font-size: 14px;">参加会议：麻醉学专业委员会成立大会</div>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection