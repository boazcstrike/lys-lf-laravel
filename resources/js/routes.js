import Landing from './views/Landing'
import Articles from './views/Articles'
import Contact from './views/Contact'
import Profile from './views/Profile'

const routes = [
    { path: '/', component: Landing },
    { path: '/articles', component: Articles },
    { path: '/contact', component: Contact },
    { path: '/profile', component: Profile }
]

export default routes