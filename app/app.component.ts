import {Component} from 'angular2/core';
import {RouteConfig, ROUTER_DIRECTIVES} from 'angular2/router';
import {loginComponent} from './login/login.component';

@Component({
    selector: 'my-app',
    templateUrl: 'app/login/login.html',
    directives: [ROUTER_DIRECTIVES]
})



export class appComponent{

}