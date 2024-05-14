<div class="card border-0 py-3 w-100 shadow-sm">
  <div class="list-group list-group-flush">
    <?php
    foreach( $pages as $slug => $pg):
        $link   = $slug?$permalink.'?pg='.$slug:$permalink;
        $active = $page==$slug?'list-group-item active':'list-group-item';

        echo '<a href="'.$link.'" class="'.$active.' list-group-item-action">';
          if(isset($pg['icon'])):
            echo '<span class="me-2">';
              echo $pg['icon'];
            echo '</span>';
          endif;
          echo $pg['title'];
        echo '</a>';

      endforeach;
      ?>
      <a href="<?php echo wp_logout_url( $permalink ); ?>" class="list-group-item list-group-item-action">
        <span class="me-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/> <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/> </svg>
        </span>
        Logout
      </a>
  </div>
</div>