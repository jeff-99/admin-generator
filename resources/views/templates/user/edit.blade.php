{{'@'}}extends('brackets/admin::admin.layout.form')

{{'@'}}section('body')

    <div class="container-xl">

        <div class="card">

            @if($hasTranslatable)<{{ $modelJSName }}-form
                :action="'{{'{{'}} route('admin/{{ $modelViewsDirectory }}/update', ['{{ $modelVariableName }}' => ${{ $modelVariableName }}]) }}'"
                :data="{{'{{'}} ${{ $modelVariableName }}->toJsonAllLocales() }}"
                :activation="!!'@{{ $activation }}'"
                :locales="@{{ json_encode($locales) }}"
                :send-empty-locales="false"
                inline-template>
            @else<{{ $modelJSName }}-form
                :action="'{{'{{'}} route('admin/{{ $modelViewsDirectory }}/update', ['{{ $modelVariableName }}' => ${{ $modelVariableName }}]) }}'"
                :data="{{'{{'}} ${{ $modelVariableName }}->toJson() }}"
                :activation="!!'@{{ $activation }}'"
                inline-template>
            @endif

                <form class="form-horizontal" method="post" {{'@'}}submit.prevent="onSubmit" :action="this.action">

                    <div class="card-header">
                        <i class="fa fa-pencil"></i> Edit the {{ $modelBaseName }}
                    </div>

                    <div class="card-block">

                        {{'@'}}include('admin.{{ $modelDotNotation }}.components.form-elements')

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </form>

        </{{ $modelJSName }}-form>

    </div>

</div>

{{'@'}}endsection