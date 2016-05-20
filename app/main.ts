import {bootstrap} from 'angular2/platform/browser';
import {bind} from 'angular2/core';
import {Http, Headers, HTTP_PROVIDERS} from 'angular2/http';
import {ROUTER_PROVIDERS} from 'angular2/router';
import {appComponent} from './app.component';

bootstrap(appComponent, [HTTP_PROVIDERS, ROUTER_PROVIDERS]);