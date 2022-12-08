import React from "react";
import "./about.css";
import ME from "../../assets/me_portrait.png";
import { FaAward } from "react-icons/fa";
import { FiUsers } from "react-icons/fi";
import { VscFolderLibrary } from "react-icons/vsc";

const About = () => {
  return (
    <section id="about">
      <h5>Get To Know</h5>
      <h2>About Me</h2>

      <div className="container about__container">
        <div className="about__me">
          <div className="about__me-image">
            <img src={ME} alt="About Image" />
          </div>
        </div>

        <div className="about__content">
          <div className="about__cards">
            <article className="about__card">
              <FaAward className="about__icon" />
              <h5>Experience</h5>
              <small>3+ Years Working</small>
            </article>
            <article className="about__card">
              <FiUsers className="about__icon" />
              <h5>Clients</h5>
              <small>1</small>
            </article>
            <article className="about__card">
              <VscFolderLibrary className="about__icon" />
              <h5>Projects</h5>
              <small>3+ Completed</small>
            </article>
          </div>

          <p className="about_details">
            I graduated from California State University of Los Angeles with a
            bachelors degree in Computer Science. My love for making websites
            came from attending a webpage workshop provided by Association for
            Computing Machinery. I've been working on my own website making sure
            it is up to date with the current standards, but I am challenging
            myself to improve my programming skillset by programming with java
            daily. I love to try new things by pushing my self to keep with with
            MySQL.
          </p>

          <a href="#contact" className="btn btn-primary">
            Let's Talk
          </a>
        </div>
      </div>
    </section>
  );
};

export default About;
