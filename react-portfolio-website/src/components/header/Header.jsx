import React from "react";
// import { useEffect, useRef } from "react";
import Typed from "react-typed";
import "./header.css";
import CTA from "./CTA";
import HeaderSocial from "./HeaderSocials";
import ME from "../../assets/professional_photo_black.png";

const Header = () => {
  return (
    <header>
      <div className="container header__container">
        <h5>Hello I'm</h5>
        <h1>Anthony Viramontes</h1>
        <div>
          <span id="codeText">
            <Typed
              className="typed"
              strings={["Full Stack Developer", "Computer Scientist", "Cal State La Alumni", "Freelancer"]}
              typeSpeed={100}
              backSpeed={50}
              backDelay={60}
              loop
            />
            
          </span>
        </div>
        <CTA />
        <HeaderSocial />

        <div className="me">
          <img src={ME} alt="me" />
        </div>

        <a href="#contact" className="scroll__down">
          Scroll Down
        </a>
      </div>
    </header>
  );
};

export default Header;
