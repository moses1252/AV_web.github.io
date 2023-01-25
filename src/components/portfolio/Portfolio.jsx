import React from 'react'
import './portfolio.css'
import IMG1 from '../../assets/portfolio_1.jpg'
import IMG2 from '../../assets/portfolio_2.jpg'
import IMG3 from '../../assets/portfolio_3.jpg'

// DO NOT USE THE IMAGES IN PRODCTION

const data = [
  {
    id: 1,
    image: IMG1,
    title: "Jasel's Personal Portfolio",
    github: 'https://jaselvivas.com/',
    demo: 'Demo'
  },
  {
    id: 2,
    image: IMG2,
    title: 'My first website',
    github: 'https://moses1252.github.io/First_Website.github.io/',
    demo: 'Demo'
  },
  {
    id: 3,
    image: IMG3,
    title: 'Second attempt at redesigning website',
    github: 'https://moses1252.github.io/Second_Website.github.io/',
    demo: 'Demo'
  }
]

const Portfolio = () => {
  return (
    <section id='portfolio'>
      <h5>My Recent Work</h5>
      <h2>Portfolio</h2>

      <div className="container portfolio__container">
        {
          data.map(({id, image, title, github, demo}) => {
            return (
              <article key={id} className='portfolio__item'>
                <div className="portfolio__item-image">
                  <img src={image} alt={title} />
                </div>
                <h3>{title}</h3>
                <div className="portfolio__item-cta">
                  <a href={github} className='btn' target='_blank'>{demo}</a>
                </div>
              </article>
            )
          })
        }
      </div>
    </section>
  )
}

export default Portfolio