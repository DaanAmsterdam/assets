import Home from './components/Home';
import About from './components/about';

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home
        },

        {
            path: '/about',
            component: About,
            name: 'about'
        }
    ]
};