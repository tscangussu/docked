<?php

  defined( 'WP_ENV' ) or define( 'WP_ENV', getenv( 'WP_ENV' ) ?: 'production' );

  // Gitium setting
  define( 'GIT_DIR', getenv( 'GIT_DIR' ) ?: dirname( WP_CONTENT_DIR ) );

  // Conditional settings

  // WordPress debug mode
  if ( 'WP_ENV' == 'production' ) {
    define( 'WP_DEBUG', false );
    define( 'WP_DEBUG_LOG', false );
    define( 'WP_DEBUG_DISPLAY', false );
    define( 'SCRIPT_DEBUG', false );
  } else {
    define( 'WP_DEBUG', getenv( 'WP_DEBUG') );
    define( 'WP_DEBUG_LOG', getenv( 'WP_DEBUG_LOG' ) );
    define( 'WP_DEBUG_DISPLAY', getenv( 'WP_DEBUG_DISPLAY' ) );
    define( 'SCRIPT_DEBUG', getenv( 'SCRIPT_DEBUG') );
  }
