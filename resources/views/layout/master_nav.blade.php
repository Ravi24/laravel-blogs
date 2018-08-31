
<div class="blog-masthead">
   <div class="container">
     <nav class="nav blog-nav">
       <a class="nav-link active" href="/">Home</a>
       <a class="nav-link" href="../posts/create">Publish Posts</a>
       <a class="nav-link" href="../posts/edit">Copy Blog<small>&nbsp(test)</small></a>
       <a class="nav-link" href="#">New hires</a>
       <a class="nav-link" href="#">About</a>
       <a class="nav-link" href="#">
       @if(Auth::check())
           {{Auth::user()->name}}
       @endif
       </a>
     </nav>
   </div>
 </div>
    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
      </div>
    </div>