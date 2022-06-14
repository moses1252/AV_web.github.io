import React from 'react'
import {BsLinkedin} from 'react-icons/bs'
import {FaGithub} from 'react-icons/fa'
import {FiDribbble} from 'react-icons/fi'


const HeaderSocials = () => {
  return (
    <div className= 'header__socials'>
      <a href="https://www.linkedin.com/in/anthony-viramontes/" target="blank"><BsLinkedin /></a>
      <a href="https://github.com/moses1252/Java-Projects" target="blank"><FaGithub /></a>
    </div>
  )
}

export default HeaderSocials