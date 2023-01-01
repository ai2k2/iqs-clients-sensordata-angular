
<?hh

use PHPUnit\Framework\TestCase;

final class EmailTestCase extends TestCase {

  public function testCanBeCreatedFromValidEmailAddress() {
    $this->assertInstanceOf(
      Email::class,
      Email::fromString('user@example.com'));
  }