<form role="search" method="get" class="form-group" action="<?php echo home_url( '/' ); ?>">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="input-group">
                <input id="search" type="search" class="form-control" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"/>
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Search</button>
                </span>
            </div>
        </div>
    </div>
</form>