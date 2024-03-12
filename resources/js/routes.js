
import Viewarticles from "./components/articles/Viewarticles.vue"
import Addarticle from "./components/articles/Addarticle.vue"
export const routes = [
  {
    path: '/api/articles',
    component:Viewarticles
   },
 
  {
    name: "Viewarticles",
    path: "/listart",
    component: Viewarticles
  },
  {
  name: "Addarticle",
    path: "/addarticle",
    component: Addarticle
},
];
