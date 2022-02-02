const Home = ()=> import('./components/Home.vue');

//Importamos los componentes para usuarios
const Mostrar = ()=> import('./components/usuarios/Mostrar.vue');
const Crear = ()=> import('./components/usuarios/Crear.vue');
const Editar = ()=> import('./components/usuarios/Editar.vue');
//Importamos los componentes para libros
const MostrarLibro = ()=> import('./components/libros/Mostrar.vue');
const CrearLibro = ()=> import('./components/libros/Crear.vue');
const EditarLibro = ()=> import('./components/libros/Editar.vue');

export const routes=[
    {
        name:'home',
        path:'/',
        component:Home
    },
    {
        name:'mostrarUsuarios',
        path:'/usuarios',
        component:Mostrar
    },
    {
        name:'crearUsuario',
        path:'/crear',
        component:Crear
    },
    {
        name:'editarUsuario',
        path:'/editar/:id',
        component:Editar
    },
    {
        name:'mostrarLibros',
        path:'/libros',
        component:MostrarLibro
    },
    {
        name:'crearLibro',
        path:'/crear',
        component:CrearLibro
    },
    {
        name:'editarLibro',
        path:'/editar/:id',
        component:EditarLibro
    }
]