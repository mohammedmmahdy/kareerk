@extends('adminPanel.layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{!! route('adminPanel.pages.index') !!}">{{$page->name}}</a>
    </li>
    <li class="breadcrumb-item">@lang('models/paragraphs.plural')</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('flash::message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>
                        @lang('models/paragraphs.plural')
                        @can('paragraphs create')
                        <a class="pull-right" href="{{ route('adminPanel.pages.paragraphs.create', $page->id) }}"><i class="fa fa-plus-square fa-lg"></i> Create</a>
                        @endcan
                    </div>
                    <div class="card-body">
                        @include('adminPanel.paragraphs.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
