@extends('layouts.back')
<div class="d-flex">

    <div class="d-flex">

        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px ;  height:100vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-4">Dashboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li >
                <a href={{route('home')}}   class="nav-link text-warning" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    HOME
                  </a>
              </li>
              {{-- <li>
                <a href="{{route('blog.change')}}" class="nav-link text-white active">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  Blog
                </a>
              </li> --}}
              <li>
                <a href="{{route('portefolio.change')}}" class="nav-link text-white">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                  PorteFolio
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                </a>
              </li>
              <li>
                <div class="bg-success btn btn-primary d-flex justify-content-center aligns-item-center">
                    <button type="button" class="btn btn-success d-flex justify-content-center aligns-item-center">
                        {{-- <a  class="nav-link text-white" href={{route("blog_form")}}>AJOUTER BLOG</a> --}}
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                     </button>
                </div>
                </a>
              </li>
            </ul>
            <hr>

          </div>

    <div>

    {{-- <div class="container mt-3">
       <h1> MODIFIER LES BLOGS</h1>
       @forelse ($tableblog as $item)
       <ul class="list-unstyled">
           <li>Titre :  {{$item->titre}}</li>
           <li>Description : {{$item->description}}</li>
           <li>Image : <br> <img style="width: 200px ; height :100px" src={{$item->image}} alt=""> </li>
           <ul class="d-flex list-unstyled" >
               <li ><button type="button" class="btn btn-primary"><a href={{route('blog.edit',$item->id)}} class="text-white">Edit</a></button></li>
               <li class="mx-1"><button type="button" class="btn btn-warning">
                   <a href={{route('blog.show',$item->id)}}>
                    Infos
                </a>  </button>
            </li>
               <li class="mx-3">
                   <form method="POST"action="{{route('blog.destroy', $item->id)}}" >
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
            </li>
           </ul>
           <hr>
       </ul>
       @empty
<h1> Il n'y a rien a modifier pour l'instant</h1>
       @endforelse

    </div> --}}
</div>
