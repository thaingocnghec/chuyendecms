<div class="container">
  <div class="row row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">

      <div class="custom-search-form">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
          <div class="input-group input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input type="search" class="form-control form-none"
              placeholder="<?php echo esc_attr_x('Search topics or keywords', 'placeholder', 'search-page-custom-theme'); ?>"
              value="<?php echo get_search_query(); ?>" name="s" />
            <div class="input-group-append">
              <button type="submit"
                class="btn btn-success"><?php echo _x('Search', 'submit button', 'search-page-custom-theme'); ?></button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>