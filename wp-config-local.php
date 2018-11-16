<?php

  defined( 'WP_ENV' ) or define( 'WP_ENV', getenv( 'WP_ENV' ) ?: 'development' );

  // WordPress debug mode
  if ( 'WP_ENV' == 'development' ) {
    defined( 'WP_DEBUG' ) or define( 'WP_DEBUG', getenv( 'WP_DEBUG' ) ?: true );
    defined( 'WP_DEBUG_LOG' ) or define( 'WP_DEBUG_LOG', getenv( 'WP_DEBUG_LOG' ) ?: true );
    defined( 'WP_DEBUG_DISPLAY' ) or define( 'WP_DEBUG_DISPLAY', getenv( 'WP_DEBUG_DISPLAY' ) ?: true );
    defined( 'SCRIPT_DEBUG' ) or define( 'SCRIPT_DEBUG', getenv( 'SCRIPT_DEBUG' ) ?: true );
  }
