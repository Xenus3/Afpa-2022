import React, { useEffect, useState } from 'react';
import axios from "axios";
import Cards from './Cards';

const Countries = () => {
    const [data, setData] = useState([])
    // le useeffect se joue quand le composant est monté
    useEffect(() => {
        axios.get("https://restcountries.com/v3.1/all").then((res) => setData(res.data));
    }, [])
    return (
        <div className='countries'>
            <ul class="radio-container">
                <input type="range" min="1" max="250"/>
            </ul>
            <ul>
                {
                    data.map((country, index) => (<Cards key={index} country={country}/>))
                }
            </ul>
        </div>
    );
};

export default Countries;