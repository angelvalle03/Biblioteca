<template>
<div class="container">
    <div class="row">
        
        <div class="col-12 mt-4">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="usuario in usuarios" :key="usuario.id">
                            <td>{{usuario.id}}</td>
                            <td>{{usuario.nombre}}</td>
                            <td>{{usuario.email}}</td>
                            <td>
                                <router-link :to="{name:'editarUsuario', params:{id:usuario.id}}" class="btn btn-success btn-sm">Editar</router-link>

                            </td>
                            <td>
                                <router-link :to="{name:'eliminarUsuario',params:{id:usuario.id}}">Editar</router-link>
                                <a type="button" @click="eliminarUsuario(usuario.id)" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="col-lg-12 mb-4 text-center mt-3">
            <router-link :to='{name:"crearUsuario"}' class="btn btn-success">Nuevo</router-link>
        </div>
    </div>
</div>
    
</template>
<script>
export default {
    name:'usuarios-mostrar',
    data(){
        return{
            usuarios:[]
        }
    },
    mounted(){
        this.mostrarUsuarios()
    },
    methods:{
        async mostrarUsuarios(){
            await this.axios.get('/api/usuario')
            .then(response=>{
                this.usuarios = response.data
            }).catch(error=>{
                this.usuario = []
            })
        },
        eliminarUsuario(id){
            if(confirm("¿Desea eliminar el registro?")){
                this.axios.delete('/api/usuario/${id}')
                .then(response=>{
                    this.mostrarUsuarios()
                })
                .catch(error=>{
                    console
                })
            }
        }

    }
}
</script>