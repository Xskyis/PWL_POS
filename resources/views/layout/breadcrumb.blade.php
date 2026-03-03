<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"><h1>{{ $breadcrumb->title }}</h1></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @foreach($breadcrumb->list as $key => $value)
                        @if($key == count($breadcrumb->list) - 1)
                            <li class="breadcrumb-item active">{{ is_array($value) ? $value['name'] : $value }}</li>
                        @else
                            <li class="breadcrumb-item">
                                @if(is_array($value))
                                    <a href="{{ $value['url'] }}">{{ $value['name'] }}</a>
                                @else
                                    {{ $value }}
                                @endif
                            </li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>  