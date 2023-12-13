type TArtistsProps = {
    artists: any[];
};
const Artists = ({ artists }: TArtistsProps) => {
    return (
        <div>
            <h1>Artists</h1>
            <pre>{JSON.stringify(artists, null, 2)}</pre>
        </div>
    );
};

export default Artists;
