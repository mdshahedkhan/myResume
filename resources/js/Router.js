// Start Import VueComponent
import AboutComponent from "./Components/AboutComponent";
import ExperienceComponent from "./Components/ExperienceComponent";
import EducationComponent from "./Components/EducationComponent";
import SkillsComponent from "./Components/SkillsComponent";
import InterestsComponent from "./Components/InterestsComponent";
import AwardsComponent from "./Components/AwardsComponent";
/*End Import VueComponent*/

const routes = [
    {
        path: "/", name: "about", component: AboutComponent, meta: { title: "My About" }
    },
    {
        path: "/experience", name: "experience", component: ExperienceComponent, meta: { title: "My Experience" }
    },
    {
        path: "/education", name: "education", component: EducationComponent, meta: { title: "My Education" }
    },
    {
        path: "/skills", name: "skills", component: SkillsComponent, meta: { title: "My Skills" }
    },
    {
        path: "/interests", name: "interests", component: InterestsComponent, meta: { title: "Interests" }
    },
    {
        path: "/awards", name: "awards", component: AwardsComponent, meta: { title: "Awards" }
    }

]

export default routes;
