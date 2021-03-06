@extends('layouts.app')
@section('title')
    {{ t("Company Team Team")  }}
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">{{ t("New Team")  }}</h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('companyTeams.index') }}" class="btn btn-primary">{{ t("Back")  }}</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body">
                               <form method="post" action="{{ route('companyTeams.store') }}" enctype="multipart/form-data">
                                   @csrf
                                   <div class="row">
                                       <!-- Name Field -->
                                       <div class="form-group col-sm-6">
                                           <label for="name">{{ t("Name")  }}</label>
                                           <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                       </div>

                                       <!-- Name Lang Field -->
                                       <div class="form-group col-sm-6">
                                           <label for="job">{{ t("Job")  }}</label>
                                           <input type="text" class="form-control" id="job" name="job" value="{{ old('job') }}">
                                       </div>

                                       <!-- Description Field -->
                                       <div class="form-group col-sm-6 col-lg-12">
                                           <label for="description">{{ t("Description")  }}</label>
                                           <textarea class="form-control" id="description" name="description"></textarea>
                                       </div>

                                       <!-- Image Field -->
                                       <div class="form-group col-sm-6">
                                           <div class="form-group">
                                               <label for="Image">{{ t("Image")  }}</label><br>
                                               <input type="file" style="width: 500px;" id="images" name="image" value="{{ old('image') }}">
                                           </div>
                                       </div>
                                   </div>
                                   <!-- Submit Field -->
                                   <div class="form-group col-sm-12">
                                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                       <a href="{{ route('companyTeams.index') }}" class="btn btn-light">{{ t("Cancel")  }}</a>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection
