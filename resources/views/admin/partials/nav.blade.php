<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          @if(auth()->user()->role=='admin')
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
              
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="{{route('admin.student')}}" aria-expanded="false" aria-controls="ui-basic">
              
              <span class="menu-title">Students</span>
              
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.teacher')}}">
              
              <span class="menu-title">Teachers</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.subject')}}">
              
              <span class="menu-title">Subject</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.class')}}">
              
              <span class="menu-title">Class</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.routine')}}">
              
              <span class="menu-title">Routine</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.exam')}}">
              
              <span class="menu-title">Exam</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.user.list')}}">
              
              <span class="menu-title">User</span>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.payment')}}">
              
              <span class="menu-title">Payment</span>
            </a>
          </li>
        </ul>
      </nav>
