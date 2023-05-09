@extends('layouts.app_template')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="text-block">K-POP BOY</div>
            <div class="div-block-6">
                <timer end_date="{{ $votation->end_date }}" style="display: flex"></timer>
                <a href="#" class="link-block w-inline-block">
                    <img src="{{ asset('images/download.png') }}" loading="lazy" alt="">
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="div-block-18">
                <a href="#" class="link-block-2 w-inline-block" style="background: url('{{ $votation->options[0]->cover_photo }}')">
                    <div>
                        <div class="text-block-6">1</div>
                        <div class="html-embed-2 w-embed">
                            <svg width="75" version="1.1" id="Capa_1" viewbox="0 0 464 42" xml:space="preserve" sodipodi:docname="icon.svg" height="65" inkscape:version="1.2.2 (732a01da63, 2022-12-09)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                                <sodipodi:namedview id="namedview21" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="false" inkscape:zoom="5.2606306" inkscape:cx="14.82712" inkscape:cy="22.905999" inkscape:window-width="1920" inkscape:window-height="1080" inkscape:window-x="1920" inkscape:window-y="0" inkscape:window-maximized="1" inkscape:current-layer="Capa_1"></sodipodi:namedview>
                                <g id="g18" transform="translate(0,-209.88)">
                                    <polygon points="0,156 232,428 128.889,156 " id="polygon2" style="fill: rgb(130, 200, 220);"></polygon>
                                    <polygon points="335.111,156 232,428 464,156 " id="polygon4" style="fill: rgb(180, 230, 240);"></polygon>
                                    <polygon points="232,36 128.889,156 232,156 335.111,156 " id="polygon6" style="fill: rgb(217, 255, 255);"></polygon>
                                    <polygon points="232,428 335.111,156 232,156 128.889,156 " id="polygon8" style="fill: rgb(160, 220, 230);"></polygon>
                                    <polygon points="104,36 0,156 128.889,156 " id="polygon10" style="fill: rgb(160, 220, 230);"></polygon>
                                    <polygon points="464,156 360,36 335.111,156 " id="polygon12" style="fill: rgb(235, 255, 255);"></polygon>
                                    <polygon points="360,36 232,36 335.111,156 " id="polygon14" style="fill: rgb(180, 230, 240);"></polygon>
                                    <polygon points="232,36 104,36 128.889,156 " id="polygon16" style="fill: rgb(180, 230, 240);"></polygon>
                                </g>
                    </svg>
                        </div>
                    </div>
                </a>
                <div class="div-block-19">
                    <a href="#" class="link-block-2-copy w-inline-block" style="background: url('{{ $votation->options[1]->cover_photo }}')">
                        <div>
                            <div class="text-block-6">2</div>
                            <div class="w-embed"><svg width="75" version="1.1" id="Capa_1" viewbox="0 0 464 42" xml:space="preserve" sodipodi:docname="icon.svg" height="65" inkscape:version="1.2.2 (732a01da63, 2022-12-09)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs23"></defs>
                                    <sodipodi:namedview id="namedview21" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="false" inkscape:zoom="5.2606306" inkscape:cx="14.82712" inkscape:cy="22.905999" inkscape:window-width="1920" inkscape:window-height="1080" inkscape:window-x="1920" inkscape:window-y="0" inkscape:window-maximized="1" inkscape:current-layer="Capa_1"></sodipodi:namedview>
                                    <g id="g18" transform="translate(0,-209.88)">
                                        <polygon points="0,156 232,428 128.889,156 " id="polygon2" style="fill: rgb(130, 200, 220);"></polygon>
                                        <polygon points="335.111,156 232,428 464,156 " id="polygon4" style="fill: rgb(180, 230, 240);"></polygon>
                                        <polygon points="232,36 128.889,156 232,156 335.111,156 " id="polygon6" style="fill: rgb(217, 255, 255);"></polygon>
                                        <polygon points="232,428 335.111,156 232,156 128.889,156 " id="polygon8" style="fill: rgb(160, 220, 230);"></polygon>
                                        <polygon points="104,36 0,156 128.889,156 " id="polygon10" style="fill: rgb(160, 220, 230);"></polygon>
                                        <polygon points="464,156 360,36 335.111,156 " id="polygon12" style="fill: rgb(235, 255, 255);"></polygon>
                                        <polygon points="360,36 232,36 335.111,156 " id="polygon14" style="fill: rgb(180, 230, 240);"></polygon>
                                        <polygon points="232,36 104,36 128.889,156 " id="polygon16" style="fill: rgb(180, 230, 240);"></polygon>
                                    </g>
                      </svg></div>
                        </div>
                    </a>
                    <a href="#" class="link-block-2-copy w-inline-block" style="background: url('{{ $votation->options[2]->cover_photo }}')">
                        <div>
                            <div class="text-block-6">3</div>
                            <div class="w-embed"><svg width="75" version="1.1" id="Capa_1" viewbox="0 0 464 42" xml:space="preserve" sodipodi:docname="icon.svg" height="65" inkscape:version="1.2.2 (732a01da63, 2022-12-09)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs23"></defs>
                                    <sodipodi:namedview id="namedview21" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="false" inkscape:zoom="5.2606306" inkscape:cx="14.82712" inkscape:cy="22.905999" inkscape:window-width="1920" inkscape:window-height="1080" inkscape:window-x="1920" inkscape:window-y="0" inkscape:window-maximized="1" inkscape:current-layer="Capa_1"></sodipodi:namedview>
                                    <g id="g18" transform="translate(0,-209.88)">
                                        <polygon points="0,156 232,428 128.889,156 " id="polygon2" style="fill: rgb(130, 200, 220);"></polygon>
                                        <polygon points="335.111,156 232,428 464,156 " id="polygon4" style="fill: rgb(180, 230, 240);"></polygon>
                                        <polygon points="232,36 128.889,156 232,156 335.111,156 " id="polygon6" style="fill: rgb(217, 255, 255);"></polygon>
                                        <polygon points="232,428 335.111,156 232,156 128.889,156 " id="polygon8" style="fill: rgb(160, 220, 230);"></polygon>
                                        <polygon points="104,36 0,156 128.889,156 " id="polygon10" style="fill: rgb(160, 220, 230);"></polygon>
                                        <polygon points="464,156 360,36 335.111,156 " id="polygon12" style="fill: rgb(235, 255, 255);"></polygon>
                                        <polygon points="360,36 232,36 335.111,156 " id="polygon14" style="fill: rgb(180, 230, 240);"></polygon>
                                        <polygon points="232,36 104,36 128.889,156 " id="polygon16" style="fill: rgb(180, 230, 240);"></polygon>
                                    </g>
                      </svg></div>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                @foreach($votation->options as  $index => $option)
                    <div class="div-block-8">
                        <div class="div-block-10">
                            <div class="text-block-7"> {{ $index + 1 }}</div>
                            <div class="div-block-14">
                                <div class="div-block-9">
                                    <img src="{{ $option->photo }}" loading="lazy" width="78" alt="">
                                </div>
                                <div class="div-block-13">
                                    <div class="text-block-8"><strong>{{ $option->name }} </strong><em class="italic-text">{{ $option->bank }}</em><strong> </strong></div>
                                    <div class="div-block-11">
                                        <div class="div-block-12" style="width: {{  $votation->options[0]->likes_count != 0 ? (($option->likes_count / $votation->options[0]->likes_count)  * 100) : 0 }}%"></div>
                                    </div>
                                </div>
                            </div>
                            <like :position="{{ $index + 1 }}" :option="{{ $option }}" :likes_count="{{ $option->likes_count }}"></like>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <likes :auth="{{ auth()->user() ? 1 : 0 }}" ref="likes"></likes>
@endsection
