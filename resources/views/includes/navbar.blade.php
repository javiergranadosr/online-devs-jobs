<a class="text-white text-sm  font-bold p-3   {{  Request::is('vacantes') ? 'bg-teal-500' : ''  }} "  href=" {{  route('vacants.index')  }} "> Vacantes  </a>
<a class="text-white text-sm  font-bold p-3  {{  Request::is('vacantes/create') ? 'bg-teal-500' : ''  }}"  href="{{  route('vacants.create')  }}"> Nueva vacante </a>
