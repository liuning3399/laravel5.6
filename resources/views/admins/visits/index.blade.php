@extends('admins.app') 

@section('title', '访问者列表') 

@section('content')
<div class="container-fluid">
    <div class="card text-muted">
        <div class="card-header bg-white">
            
            <div class="d-flex justify-content-between">
                <div class="p-2 bd-highlight">访问者列表</div>
            </div>
        </div>
        @if(isset($visits) && count($visits))
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">文章id</th>
                                <th scope="col">访问者</th>
                                <th scope="col">ip</th>
                                <th scope="col">url</th>
                                <th scope="col">port</th>
                                <th scope="col">formpage</th>
                                <th scope="col">浏览器</th>
                                <th scope="col">系统</th>
                                <th scope="col">地址</th>
                                <th scope="col">地址编码</th>
                                <th scope="col">isp</th>
                                <th scope="col">isp_id</th>
                                <th scope="col">code</th>
                                <th scope="col">info</th>
                                <th scope="col">发布时间</th>
                                <th scope="col">更新时间</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($visits as $visit)
                                <tr>
                                    <th scope="row">{{ $visit->id }}</th>
                                    <th>{{ $visit->post_id }}</th>
                                    <th>{{ $visit->user_id }}</th>
                                    <th>{{ $visit->ip }}</th>
                                    <th>{{ $visit->url }}</th>
                                    <th>{{ $visit->port }}</th>
                                    <th>{{ $visit->formpage }}</th>
                                    <th>{{ $visit->browser }}</th>
                                    <th>{{ $visit->os }}</th>
                                    <th>{{ $visit->country }}&nbsp;&nbsp;{{ $visit->region }}&nbsp;&nbsp;{{ $visit->city }}&nbsp;&nbsp;{{ $visit->area }}&nbsp;&nbsp;{{ $visit->county }}</th>
                                    <th>{{ $visit->country_id }}&nbsp;&nbsp;{{ $visit->region_id }}&nbsp;&nbsp;{{ $visit->city_id }}&nbsp;&nbsp;{{ $visit->area_id }}&nbsp;&nbsp;{{ $visit->county_id }}</th>
                                    <th>{{ $visit->isp }}</th>
                                    <th>{{ $visit->isp_id }}</th>
                                    <th>{{ $visit->code }}</th>
                                    <td>{{ $visit->info }}</td>
                                    <td title="{{ $visit->updated_at }}">{{ $visit->updated_at->diffForHumans() }}</td>
                                    <td title="{{ $visit->created_at }}">{{ $visit->created_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                {{ $visits->links() }}
            </div>
        @else
            <div class="card-body">
                <p class="text-muted">
                    没有任何文章 ～
                </p>
            </div>
        @endif
    </div>
</div>
@stop

@section('script')
<script type="text/javascript">
    $('.js-btn-del').on('click',function(){
        var oForm = $(this).children('form');
        swal_delete(function(){
            oForm.submit();
        });
    });
</script>
@stop