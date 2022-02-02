<template>
<div class="container">
    <div class="row">
        
        <div class="col-12 mt-4">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Autor</th>
                            <th>Numero de paginas</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="libro in libros" :key="libro.id">
                            <td>{{libro.id}}</td>
                            <td>{{libro.nombre}}</td>
                            <td>{{libro.autor}}</td>
                            <td>{{libro.numero_paginas}}</td>
                            <td>
                                <router-link :to="{name:'editarLibro', params:{id:libro.id}}" class="btn btn-success btn-sm">Editar</router-link>

                            </td>
                            <td>
                                <router-link :to="{name:'eliminarLibro',params:{id:libro.id}}">Editar</router-link>
                                <a type="button" @click="eliminarLibro(libro.id)" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="col-lg-12 mb-4 text-center mt-3">
            <router-link :to='{name:"crearLibro"}' class="btn btn-success">Crear</router-link>
        </div>
    </div>
</div>
    
</template>
<script>
export default {
    name:'libros-mostrar',
    data(){
        return{
            libros:[]
        }
    },
    mounted(){
        this.mostrarLibros()
    },
    methods:{
        async mostrarLibros(){
            await this.axios.get('/api/libro').then(response=>{
                this.libros = response.data
            }).catch(error=>{
                this.libro = []
            })
        },
        eliminarLibro(id){
            if(confirm("¿Desea eliminar el registro?")){
                this.axios.delete('/api/libro/${id}')
                .then(response=>{
                    this.mostrarLibros()
                })
                .catch(error=>{
                    console
                })
            }
        }

    }
}
</script>