<template>
    <div>
        <div v-if="show" class="modal-vote">
            <div class="div-block-15">
                <div>
                    <div class="card-avatar-vote">
                        <div id="modal-position" class="text-block-4-copy" v-text="position"></div>
                        <div class="avatar">
                            <img :src="option.photo" loading="lazy" id="modal-avatar" alt="">
                        </div>
                        <div id="modal-name" class="text-block-3-copy"><strong v-text="option.name"></strong></div>
                    </div>
                    <div class="div-block-16">
                        <svg width="30" version="1.1" id="Capa_1" viewBox="0 0 464 42" xml:space="preserve" sodipodi:docname="icon.svg" height="30" inkscape:version="1.2.2 (732a01da63, 2022-12-09)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs23"></defs> <sodipodi:namedview id="namedview21" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="false" inkscape:zoom="5.2606306" inkscape:cx="14.82712" inkscape:cy="22.905999" inkscape:window-width="1920" inkscape:window-height="1080" inkscape:window-x="1920" inkscape:window-y="0" inkscape:window-maximized="1" inkscape:current-layer="Capa_1"></sodipodi:namedview> <g id="g18" transform="translate(0,-209.88)"><polygon points="0,156 232,428 128.889,156 " id="polygon2" style="fill: rgb(130, 200, 220);"></polygon> <polygon points="335.111,156 232,428 464,156 " id="polygon4" style="fill: rgb(180, 230, 240);"></polygon> <polygon points="232,36 128.889,156 232,156 335.111,156 " id="polygon6" style="fill: rgb(217, 255, 255);"></polygon> <polygon points="232,428 335.111,156 232,156 128.889,156 " id="polygon8" style="fill: rgb(160, 220, 230);"></polygon> <polygon points="104,36 0,156 128.889,156 " id="polygon10" style="fill: rgb(160, 220, 230);"></polygon> <polygon points="464,156 360,36 335.111,156 " id="polygon12" style="fill: rgb(235, 255, 255);"></polygon> <polygon points="360,36 232,36 335.111,156 " id="polygon14" style="fill: rgb(180, 230, 240);"></polygon> <polygon points="232,36 104,36 128.889,156 " id="polygon16" style="fill: rgb(180, 230, 240);"></polygon></g></svg>

                        <div id="modal-vote-count" class="text-block-10" v-text="option.likes_count"></div>
                    </div>
                </div>
                <div class="div-block-17"></div>
                <div class="div-block-20">
                    <button @click="like" class="button-3 w-button">Like</button>
                    <button @click="show = false" class="button-close w-button">Close</button>
                </div>
            </div>
        </div>

        <div v-if="isLogin" class="modal-confirm">
            <div class="div-block-15">
                <div>
                    <div class="text-block-11">Please login to continue</div>
                </div>
                <div class="div-block-17"></div>
                <div class="div-block-20">
                    <a href="/login" class="button-3-copy w-button">Confirm</a>
                </div>
            </div>
        </div>
        <div v-if="showVoting" class="modal-confirm">
            <div class="div-block-15">
                <div>
                    <div class="text-block-11">{{ message }}</div>
                </div>
                <div class="div-block-17"></div>
                <div class="div-block-20">
                    <button @click="close" class="button-3-copy w-button">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import {eventBus} from "../app";

export default {
    props : {
        auth : Number
    },
    created() {
        eventBus.$on('like', this.handleLike);
    },
    data (){
        return {
            option : null,
            show : false,
            showVoting : false,
            message: '',
            isLogin : false,
            position : 0,
        }
    },
    methods : {
        like (){
            console.log('like');
            axios.post('/votations/like/' + this.option.id)
                .then(response => {
                    console.log(response.data);
                    location.reload();
                })
                .catch(error => {
                    console.error(error);
                    this.showVoting = true;
                    this.message = 'Ya has votado por esta opción.';
                });
        },
        handleLike(data, position) {
            if(this.auth === 1) {
                this.option = data;
                this.show = true;
                this.position = position;
            }else{
                this.isLogin = true;
            }
        },
        close (){
            this.show = false;
            this.showVoting = false;
        }
    }
}
</script>

<style scoped>

</style>
