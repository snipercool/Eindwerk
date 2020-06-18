<template>
    <div class="app__column mx-0 py-4" data-step="2" data-intro="De keuze vakken zijn de vakken die niet verplicht zijn. Deze kan je gebruiken door te slepen naar een jaar en opslaan.">
        <div class="row">
            <div class="col-11 mx-auto">
                <h3>{{title}}</h3>
                <draggable class="list-group" tag="ul" v-model="fasedata" v-bind="dragOptions" @start="isDragging = true"
                @end="isDragging = false">
                    <transition-group type="transition" name="flip-list">
                        <li class="list-group-item obligated mr-2 my-3 border-0 rounded"
                            :class="{ 'choice' : element.obligated == 'no'}" v-for="element in fasedata"
                            :key="element.id">
                            <div class="row d-flex py-0 ">
                                <div class="mr-auto px-2">{{ element.name }} </div>
                                <div class=" px-2">{{ element.studyPoints}} stp. </div>
                            </div>
                            <div class="row d-flex py-0">
                                <div class=" px-2" v-if="element.fase === 1">Eerste Fase</div>
                                <div class=" px-2" v-else-if="element.fase === 2">Tweede Fase</div>
                                <div class=" px-2" v-else-if="element.fase === 3">Derde Fase</div>
                                <div class=" px-2" v-else-if="element.fase === 2 && element.fase === 3">Keuze 2de/3de
                                    Fase</div>
                                <div class=" py-1"><img v-bind:src="element.semester" alt=""> </div>
                            </div>
                            <div class="row d-flex py-0">
                                <div class=" px-2">{{ element.course_code}}</div>
                            </div>
                        </li>
                    </transition-group>
                </draggable>
            </div>
        </div>
    </div>
</template>

<script>
    import draggable from "vuedraggable";

    export default {
        components: {
            draggable
        },

        props: ["title"],

        data() {
            return {
                fasedata: []
            }
        },

        created() {
            this.fetchdata();
        },

        methods: {
            fetchdata() {
                window.axios.get('/choices')
                    .then(response => {
                        let data = response.data;
                        this.fasedata = data.filter(fasedata => fasedata.id)
                    })
                    .catch(error => console.error(error.response));
            }
        },


        computed: {
            dragOptions() {
                return {
                    animation: 200,
                    group: "description",
                    disabled: false,
                    ghostClass: "ghost"
                };
            }
        }
    };
</script>
