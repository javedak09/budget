@extends('layouts.appregister')

@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="horz-layout-basic"></h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0"></ul>
                        </div>
                    </div>

                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form action="{{ route('register.post') }}" method="POST">

                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-clipboard"></i>Sample Details</h4>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput5">Screening number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="txt1" name="txt1"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
