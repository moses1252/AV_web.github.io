import React from 'react'
import './footer.css'
import {IoLogoLinkedin} from 'react-icons/io'
import {IoLogoTwitter} from 'react-icons/io'


const footer = () => {
  return (
    <footer>
      <a href="#" className='footer__logo'></a>
      <ul className='permalinks'>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Experience</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <div className="footer__socials">
        <a href="https://www.linkedin.com/in/anthony-viramontes/"><IoLogoLinkedin /></a>
        <a href="https://twitter.com/moses1252"><IoLogoTwitter /></a>
      </div>
      
      <div className="footer__copyright">
        <small>Anthony Viramontes</small>
      </div>
    </footer>
  )
}

export default footer