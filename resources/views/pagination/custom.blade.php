<nav aria-label="...">
   @if ($paginator->hasPages())
      <ul class="pagination pagination-info justify-content-center">
         @if ($paginator->onFirstPage())
            <li class="page-item disabled">
               <a class="page-link" href="javascript:;" tabindex="-1">
                  <i class="fa fa-angle-left"></i>
                     <span class="sr-only">Previous</span>
               </a>
            </li>
         @else
         <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">
               <i class="fa fa-angle-left"></i>
               <span class="sr-only">Previous</span>
            </a>
         @endif
   @if ($paginator->hasMorePages())
      <li class="page-item">
         <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
         </a>
      </li>
   @else
      <li class="page-item disabled">
         <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
         </a>
      </li>
   @endif
</ul>
@endif