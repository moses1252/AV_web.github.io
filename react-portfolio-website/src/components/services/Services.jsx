import React from 'react'
import './services.css'
import {BiCheck} from 'react-icons/bi'

const Services = () => {
  return (
    <section id='services'>
      <h5>What I Offer</h5>
      <h2>Services</h2>
      <div className="container services__container">
        <article className="service">
          <div className="service__head">
            <h3>UI/UX Design</h3>
          </div>

          <ul className="service__list">
            <li>
              <BiCheck className='service__list-icon' />
              <p>With Figma I can provide a prototype web design</p>
            </li>
            <li>
              <BiCheck className='service__list-icon' />
              <p>I have created web designs for Association for Computing Machinery club's webpage</p>
            </li>
          </ul>
        </article>
        {/* UI/UX END */}
        <article className="service">
          <div className="service__head">
            <h3>Web Development</h3>
          </div>

          <ul className="service__list">
            <li>
              <BiCheck className='service__list-icon' />
              <p>Single Page Website</p>
            </li>
            <li>
              <BiCheck className='service__list-icon' />
              <p>Multi-Page Website</p>
            </li>
            <li>
              <BiCheck className='service__list-icon' />
              <p>Hosting Plan</p>
            </li>
            <li>
              <BiCheck className='service__list-icon' />
              <p>Domain Name</p>
            </li>
            <li>
              <BiCheck className='service__list-icon' />
              <p>Trackable metrics</p>
            </li>
            <li>
              <BiCheck className='service__list-icon' />
              <p>Private Email</p>
            </li>
            <li>
              <BiCheck className='service__list-icon' />
              <p>SSL Protection</p>
            </li>
          </ul>
        </article>
        {/* web development END */}
        {/* <article className="service">
          <div className="service__head">
            <h3>Contenet Creation</h3>
          </div>

          <ul className="service__list">
            <li>
              <BiCheck className='service__list-icon' />
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </li>
            <li>
              <BiCheck className='service__list-icon' />
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </li>
            <li>
              <BiCheck className='service__list-icon' />
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </li>
            <li>
              <BiCheck className='service__list-icon' />
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </li>
            <li>
              <BiCheck className='service__list-icon' />
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </li>
          </ul>
        </article> */}
        {/* contenet creation END */}
      </div>
    </section>
  )
}

export default Services