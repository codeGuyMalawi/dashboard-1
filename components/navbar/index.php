
  
<!-- Mobile Menu Toggle open menu button -->

   <button @click="$store.sidebar.navOpen = !$store.sidebar.navOpen" class="sm:hidden absolute top-9 left-12  focus:outline-none">
            <!-- Menu Icons -->
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-6 w-6"
                 x-bind:class="$store.sidebar.navOpen ? 'hidden':''"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="#fff">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 6h16M4 12h16m-7 6h7" />
            </svg>


 </button>

<div class=" flex justify-end ">
<span class="text-sm text-white text-right pr-2 mt-5"> <b> Code Guy Malawi </b> <br> codeguymw@gmail.com</span>
<span class="text-5xl  text-white pr-2 mt-2 ">
 | </span>
<img class="h-10 w-10 rounded-full mt-5 mr-3  " src="../public/img/id.jpg" alt="">


</div>


