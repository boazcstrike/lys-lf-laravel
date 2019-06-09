import Landing from './views/Landing'
import Articles from './views/Articles'
import Contact from './views/Contact'
import Profile from './views/Profile'
import Team from './views/Team'
import Practice from './views/Practice'

const routes = [
    { path: '/', component: Landing },
    { path: '/articles', component: Articles },
    { path: '/contact', component: Contact },
    { path: '/profile', component: Profile },
    { path: '/team', component: Team },
    { path: '/practice', component: Practice },
]

export default routes