<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><h4>Crear Usuario</h4></div>
                </div>
                <div class="card-body">
                    <form @submit.prevent="crear">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Nombre</label>
                                    <input type="text" class="form-control" v-model="usuario.nombre">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Apellido</label>
                                    <input type="text" class="form-control" v-model="usuario.apellido">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="text" class="form-control" v-model="usuario.email">
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name:'crear-usuario',
    data(){
        return{
            nombre:"",
            autor:"",
            numero_paginas:""
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/libro', this.libro)
            .then(response=>{
                this.$route.push({name:mostrarLibros})
            })
            .catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>