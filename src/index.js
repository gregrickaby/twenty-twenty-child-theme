import './index.scss';
import Prism from 'prismjs';
import { getCLS, getFID, getLCP } from 'web-vitals';
getCLS( console.log, true );
getLCP( console.log, true );
getFID( console.log ); // Does not accept a `true` parameter.
